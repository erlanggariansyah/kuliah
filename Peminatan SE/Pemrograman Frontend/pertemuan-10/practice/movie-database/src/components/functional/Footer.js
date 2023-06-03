import StyledFooter from "../../styled/Footer.styled";

const Footer = () => {
    const title = <h2>Movie App</h2>;
    const author = <p>Created by Erlangga Riansyah</p>;

    return (
        <StyledFooter>
            <footer>
                {title}
                {author}
            </footer>
        </StyledFooter>
    )
}

export default Footer;
