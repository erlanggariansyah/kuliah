import { useSelector } from "react-redux";
import Hero from "../../components/functional/Hero";
import Movies from "../../components/functional/Movies";
import React from "react";

const Home = () => {
    const movies = useSelector((selector) => selector.movies.movies);
    
    return (
        <>
            <Hero />
            <Movies movies={movies} title="List Movie" />
        </>
    )
}

export default Home;
