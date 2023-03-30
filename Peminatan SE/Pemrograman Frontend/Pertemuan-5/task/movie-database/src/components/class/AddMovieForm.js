import React from "react";
import styles from "../../styles/AddMovieForm.module.css";

export default class AddMovieForm extends React.Component {
    render() {
        const { container, form, form__field, form__left, form__right, form__title, form__image, form__button, form__subtitle } = styles;
        const button = <button className={form__button}>Submit</button>
        const title = <h2 className={form__title}>Add Movie</h2>
        const movieTitle = <label className={form__subtitle}>Title</label>
        const movieYear = <label className={form__subtitle}>Year</label>
        const movieForm = (
                <div>
                    <form>
                        <div className={form__field}>
                            {movieTitle}
                            <input type="text" title={movieTitle} name="title" />
                        </div>
                        <div className={form__field}>
                            {movieYear}
                            <input type="text" title={movieYear} name="year" />
                        </div>
                    </form>
                </div>
        )

        return (
            <div className={container}>
                <section className={form}>
                    <div className={form__left}>
                        <img className={form__image} src="https://picsum.photos/536/354" alt="placeholder"/>
                    </div>
                    <div className={form__right}>
                        {title}
                        {movieForm}
                        {button}
                    </div>
                </section>
            </div>
        )
    }
}
