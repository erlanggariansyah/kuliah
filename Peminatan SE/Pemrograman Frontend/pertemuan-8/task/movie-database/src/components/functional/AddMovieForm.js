import styles from "../../styles/AddMovieForm.module.css";
import { useState } from "react";

const AddMovieForm = (props) => {
    const { container, form, form__field, form__left, form__right, form__title, form__image, form__button, form__subtitle } = styles;
    const [ formData, setFormData ] = useState({
        title: "",
        date: "",
        link: "",
        genre: ""
    })

    const [ formValidation, setFormValidation ] = useState({
        titleNull: false,
        dateNull: false,
        linkNull: false,
        genreNull: false
    })

    const { title, date, link, genre } = formData;
    const { titleNull, dateNull, linkNull, genreNull } = formValidation;

    const { movies, setMovies } = props;
    const validate = () => {
        if (title === "") {
            setFormValidation({
                ...formValidation,
                titleNull: true
            })

            return false;
        } else if (date === "") {
            setFormValidation({
                ...formValidation,
                dateNull: true
            })
            
            return false;
        } else if (link === "") {
            setFormValidation({
                ...formValidation,
                linkNull: true
            })
            
            return false;
        } else if (genre === "") {
            setFormValidation({
                ...formValidation,
                genreNull: true
            })
            
            return false;
        } 
        
        return true;
    }

    const add = () => {
        const movie = {
            id: Math.random().toString(),
            title: title,
            year: date,
            type: genre,
            poster: link,
        }

        setMovies([...movies, movie])
    }

    const handleClick = (e) => {
        e.preventDefault()

        validate() && add();
    }

    const handleChange = (e) => {
        const { name, value } = e.target;

        setFormData({
            ...formData,
            [name]: value
        })
    }
    
    const button = <button className={form__button} type="submit">Submit</button>
    const titleForm = <h2 className={form__title}>Add Movie</h2>
    const movieTitle = <label className={form__subtitle}>Title</label>
    const movieYear = <label className={form__subtitle}>Year</label>
    const movieLink = <label className={form__subtitle}>Image Link</label>
    const movieGenre = <label className={form__subtitle}>Genre</label>
    const movieForm = (
            <div>
                <form onSubmit={handleClick}>
                    { titleNull ? <p>Title wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieTitle}
                        <input type="text" title={movieTitle} name="title" onChange={handleChange} />
                    </div>
                    { dateNull ? <p>Date wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieYear}
                        <input type="text" title={movieYear} name="date" onChange={handleChange} />
                    </div>
                    { linkNull ? <p>Link wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieLink}
                        <input type="text" title={movieLink} name="link" onChange={handleChange} />
                    </div>
                    { genreNull ? <p>Genre wajib di isi.</p> : null }
                    <div className={form__field}>
                        {movieGenre}
                        <select name="genre" value={genre} onChange={handleChange}>
                            <option value="Action" selected>Action</option>
                            <option value="Drama" selected>Drama</option>
                            <option value="Horror" selected>Horror</option>
                            <option value="Comedy" selected>Comedy</option>
                        </select>
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
