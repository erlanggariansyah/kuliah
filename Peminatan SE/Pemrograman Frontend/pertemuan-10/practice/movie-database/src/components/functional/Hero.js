import styles from "../../styles/Hero.module.css"
import { useState, useEffect } from "react"
import Button from "./Button";

const Hero = () => {
    const { container, hero, hero__left, hero__right, hero__title, hero__image, hero__genre, hero__description } = styles;

    const [movieHero, setMovieHero] = useState("")
    useEffect(() => {
        async function fetchData() {
            const url = "https://www.omdbapi.com/?apikey=fcf50ae6&i=tt2975590"
            const respose = await fetch(url);
            const data = await respose.json()

            setMovieHero(data)
        }

        fetchData()
    }, [])

    const description = <p className={hero__description}>{movieHero.Plot}</p>
    const button = <Button>Watch</Button>
    const title = <h2 className={hero__title}>{movieHero.Title}</h2>
    const genre = <h2 className={hero__genre}>{movieHero.Genre}</h2>

    return (
        <div className={container}>
            <section className={hero}>
                <div className={hero__left}>
                    {title}
                    {genre}
                    {description}
                    {button}
                </div>
                <div className={hero__right}>
                    <img className={hero__image} src={movieHero.Poster} alt="placeholder"/>
                </div>
            </section>
        </div>
    )
}

export default Hero;
