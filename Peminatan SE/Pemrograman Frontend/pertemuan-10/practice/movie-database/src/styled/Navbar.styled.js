import styled from "styled-components";

const StyledNavbar = styled.div`
    background-color: #06D6A0;
    padding: 1rem;
    color: #fff;

    nav {
        display: flex;
        flex-direction: column;
    }

    h1 {
        font-size: 2.4 rem;
        margin-bottom: 1 rem;
    }

    ul {
        display: flex;
        flex-direction: column;
        list-style: none;
        justify-content: center;
    }

    li {
        padding: 2%;
    }

    @media(min-width: 768px) {
        nav {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin-bottom: 0;
        }

        ul {
            flex-direction: row;
        }

        li {
            margin: 0 1 rem;
        }
    }
`;

export default StyledNavbar;
