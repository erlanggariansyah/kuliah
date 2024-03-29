import styled from "styled-components";

const StyledHero = styled.div`
    margin: 1rem;

    section {
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .hero__left {
        margin-bottom: 1rem;
    }

    .hero__title {
        color: #4361ee;
        margin-bottom: 1rem;
        font-size: 2.44rem;
    }

    .hero__genre {
        color: #b5179e;
        margin-bottom: 1rem;
        font-size: 1.59rem;
    }

    .hero__description {
        color: #64748b;
        margin-bottom: 1rem;
    }

    .hero__button {
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 10px;
        background-color: #4361ee;
        color: #fff;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 25px;
    }

    /* Large Screen */
    @media (min-width: 992px) {
        max-width: 1200px;
        margin: 3rem auto;

        section {
            margin: 0 1rem;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            text-align: left;
        }

        .hero__left {
            flex-basis: 40%;
        }

        .hero__right {
            flex-basis: 60%;
            text-align: right;
        }
    }
`;

export default StyledHero;
