import AddMovieForm from "./AddMovieForm";
import Hero from "./Hero";
import Movies from "./Movies";
import { useState } from "react";
import data from "../../utils/constants/data";

const Main = () => {
    const [ movies, setMovies ] = useState(data)

    return (
        <main>
            <Hero />
            <Movies movies={movies} setMovies={setMovies} />
            <AddMovieForm movies={movies} setMovies={setMovies} />
        </main>
    )
}

export default Main;
