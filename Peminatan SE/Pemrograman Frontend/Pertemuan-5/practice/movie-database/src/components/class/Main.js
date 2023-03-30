import React from "react";
import Hero from "./Hero";
import Movie from "./Movie";

export default class Main extends React.Component {
    render() {
        return (
            <main>
                <Hero />
                <Movie />
            </main>
        )
    }
}
