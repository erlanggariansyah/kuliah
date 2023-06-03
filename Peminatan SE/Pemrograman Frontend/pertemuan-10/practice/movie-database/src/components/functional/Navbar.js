import StyledNavbar from "../../styled/Navbar.styled";

const Navbar = () => {
    return (
        <StyledNavbar>
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
        </StyledNavbar>
    )
}

export default Navbar;
