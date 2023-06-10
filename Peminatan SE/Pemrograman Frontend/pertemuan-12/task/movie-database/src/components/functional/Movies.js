import styles from "../../styles/Movies.module.css"
import Movie from "../functional/Movie";

const Movies = (props) => {
    const { movies } = props;
    const { container, movies__title, movie__container } = styles;

    return (
        <div>
            <div className={container}>
                <section className={styles.movies}>
                    <h2 className={movies__title}>{props.title}</h2>
                    <div className={movie__container}>
                        {
                            movies.map((movie) => {
                                return <Movie key={movie.id} movie={movie} />
                            })
                        }
                    </div>
                </section>
            </div>
        </div>
    )
}

export default Movies;
