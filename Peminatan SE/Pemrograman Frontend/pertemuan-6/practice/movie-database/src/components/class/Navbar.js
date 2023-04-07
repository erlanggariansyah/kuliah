import React from "react";
import styles from "../../styles/Navbar.module.css"

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
                            <li className={navbar__item}>Home</li>
                            <li className={navbar__item}>Add Movie</li>
                            <li className={navbar__item}>Popular</li>
                            <li className={navbar__item}>Now Playing</li>
                            <li className={navbar__item}>Top Rated</li>
                        </ul>
                    </div>
                </nav>
            </div>
        )
    }
}

export default Navbar;
