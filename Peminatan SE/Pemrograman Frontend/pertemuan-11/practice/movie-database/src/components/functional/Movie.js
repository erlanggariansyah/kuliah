import style from "../../styles/Movie.module.css";

const Movie = (props) => {
    const { poster, title, year } = props.movie;

    return (
        <div className={style.movie}>
                <img className={style.movie__image} src={poster} alt={title} />
                <h3 className={style.movie__title}>{title}</h3>
                <p className={style.movie__date}>{year}</p>
        </div>
    )
}

export default Movie;
