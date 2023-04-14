import styles from "../../styles/AddMovieForm.module.css";
import { useState } from "react";

const AddMovieForm = (props) => {
    const { container, form, form__field, form__left, form__right, form__title, form__image, form__button, form__subtitle } = styles;
    const [ title, setTitle ] = useState("")
    const [ date, setDate ] = useState("")
    const [ isTitleNull, setIsTitleNull ] = useState(false)
    const [ isDateNull, setIsDateNull ] = useState(false)

    const { movies, setMovies } = props;
    const handleClick = (e) => {
        e.preventDefault()

        if (title === "") {
            setIsTitleNull(true)
        } else if (date === "") { 
            setIsDateNull(true) 
        } else {
            const movie = {
                id: Math.random().toString(),
                title: title,
                year: date,
                type: "movie",
                poster:
                    "https://m.media-amazon.com/images/M/MV5BNDJmMzQyMzAtMzMxMy00NTI3LTgzOGMtZDU3Yzc4MjRjNzkwXkEyXkFqcGdeQXVyMTA1OTcyNDQ4._V1_SX300.jpg",
            }

            setMovies([...movies, movie])
        }
    }

    const handleChangeTitle = (e) => {
        setTitle(e.target.value)
    }

    const handleChangeDate = (e) => {
        setDate(e.target.value)
    }
    
    const button = <button className={form__button} type="submit">Submit</button>
    const titleForm = <h2 className={form__title}>Add Movie</h2>
    const movieTitle = <label className={form__subtitle}>Title</label>
    const movieYear = <label className={form__subtitle}>Year</label>
    const movieForm = (
            <div>
                <form onSubmit={handleClick}>
                    { isTitleNull ? <p>Title wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieTitle}
                        <input type="text" title={movieTitle} name="title" onChange={handleChangeTitle} />
                    </div>
                    { isDateNull ? <p>Date wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieYear}
                        <input type="text" title={movieYear} name="year" onChange={handleChangeDate} />
                    </div>
                    {button}
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
                        {titleForm}
                        {movieForm}
                    </div>
                </section>
            </div>
    )
}

export default AddMovieForm;
