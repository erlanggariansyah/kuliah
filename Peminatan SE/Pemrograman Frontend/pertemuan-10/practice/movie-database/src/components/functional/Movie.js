import StyledMovie from "../../styled/Movie.styled";

const Movie = (props) => {
    const { poster, title, year } = props.movie;

    return (
        <StyledMovie>
                <img src={poster} alt={title} />
                <h3>{title}</h3>
                <p>{year}</p>
        </StyledMovie>
    )
}

export default Movie;
