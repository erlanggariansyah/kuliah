import styles from "../../styles/Movies.module.css"
import data from "../../utils/constants/data";
import Movie from "../functional/Movie";
import { useState } from "react";

const Movies = () => {
    const [movieData, setMovieData] = useState(data);
    const { container, movies, movies__title, movie__container } = styles;
    const handleClick = () => {
        const movie = {
            id: "tt13624499",
            title: "The Ice Age: Remake",
            year: "2023",
            type: "movie",
            poster:
                "https://m.media-amazon.com/images/M/MV5BNDJmMzQyMzAtMzMxMy00NTI3LTgzOGMtZDU3Yzc4MjRjNzkwXkEyXkFqcGdeQXVyMTA1OTcyNDQ4._V1_SX300.jpg",
        }

        setMovieData([...movieData, movie])
    }

    return (
        <div>
            <div className={container}>
                <section className={movies}>
                    <h2 className={movies__title}>Latest Movie</h2>
                    <div className={movie__container}>
                        {
                            movieData.map((movie) => {
                                return <Movie key={movie.id} movie={movie} />
                            })
                        }
                    </div>
                    <button onClick={handleClick}>Add Movie</button>
                </section>
            </div>
        </div>
    )
}

export default Movies;
