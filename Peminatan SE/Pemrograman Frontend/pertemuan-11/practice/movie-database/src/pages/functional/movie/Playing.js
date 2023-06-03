import { useEffect, useState } from "react";
import URIConstant from "../../../utils/constants/uri";
import Movies from "../../../components/functional/Movies";
import data from "../../../utils/constants/data";
import axios from "axios";
import Movie from "../../../models/movie";

const Playing = () => {
    const [movies, setMovies] = useState(data)

    const fetchData = async () => {
        const response = await axios(URIConstant.NOW_PLAYING)
        const nowPlayingMovies = response.data.results.map((nowPlayingMovie) => {
            return new Movie(nowPlayingMovie.id, nowPlayingMovie.title, nowPlayingMovie.release_date.substring(0, 4), URIConstant.imageURL(nowPlayingMovie.poster_path))
        })

        setMovies(nowPlayingMovies)
    }

    useEffect(() => {
        fetchData()
    }, [])

    return (
        <>
            <Movies movies={movies} setMovies={setMovies} />
        </>
    );
}

export default Playing;
