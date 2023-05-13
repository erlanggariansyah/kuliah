import React from "react";
import styles from "../../styles/Navbar.module.css"
import { Link } from "react-router-dom";

class Navbar extends React.Component {    
    render() {
        const { container, navbar, navbar__brand, navbar__list, navbar__item } = styles;

        return (
            <div className={container}>
                <nav className={navbar}>
                    <div>
                        <h1 className={navbar__brand}>Movie App</h1>
                    </div>
                    <div>
                        <ul className={navbar__list}>
                            <li className={navbar__item}>
                                <Link to="/">Home</Link>
                            </li>
                            <li className={navbar__item}>
                                <Link to="/movie/add">Add Movie</Link>
                            </li>
                            <li className={navbar__item}>
                                <Link to="/movie/popular">Popular</Link>
                            </li>
                            <li className={navbar__item}>
                                <Link to="/movie/playing">Now Playing</Link>
                            </li>
                            <li className={navbar__item}>
                                <Link to="/movie/rated">Top Rated</Link>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        )
    }
}

export default Navbar;
