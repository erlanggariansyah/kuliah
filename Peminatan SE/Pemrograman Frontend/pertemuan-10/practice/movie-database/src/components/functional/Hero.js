import { useState, useEffect } from "react"
import Button from "../../styled/Button";
import StyledHero from "../../styled/Hero.styled";

const Hero = () => {
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

    const description = <p className="hero__description">{movieHero.Plot}</p>
    const button = <Button size="lg">Watch</Button>
    const title = <h2 className="hero__title">{movieHero.Title}</h2>
    const genre = <h2 className="hero__genre">{movieHero.Genre}</h2>

    return (
        <StyledHero>
            <section>
                <div className="hero__left">
                    {title}
                    {genre}
                    {description}
                    {button}
                </div>
                <div className="hero__right">
                    <img src={movieHero.Poster} alt="placeholder"/>
                </div>
            </section>
        </StyledHero>    
    )
}

export default Hero;
