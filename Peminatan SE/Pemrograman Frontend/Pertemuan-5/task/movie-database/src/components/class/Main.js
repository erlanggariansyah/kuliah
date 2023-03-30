import React from "react";
import AddMovieForm from "./AddMovieForm";
import Hero from "./Hero";
import Movie from "./Movie";

export default class Main extends React.Component {
    render() {
        return (
            <main>
                <Hero />
                <Movie />
                <AddMovieForm />
            </main>
        )
    }
}
