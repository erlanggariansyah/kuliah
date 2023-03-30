import React from "react";
import style from "../../styles/Movie.module.css";

export default class Movie extends React.Component {
    render() {
        const movies = [];
        const movie = (
            <div className={style.movie}>
                <img className={style.movie__image} src="https://picsum.photos/300/400" alt="Movie" />
                <h3 className={style.movie__title}>Movie Title</h3>
                <p className={style.movie__date}>Date Title</p>
            </div>
        );

        for (let i = 0; i < 10; i++) {
            movies.push(movie);
        }

        return (
            <div className={style.container}>
                <section className={style.movies}>
                    <h2 className={style.movies__title}>Latest Movies</h2>
                    <div className={style.movies__container}>
                        {movies}
                    </div>
                </section>
            </div>
        )
    }
}
