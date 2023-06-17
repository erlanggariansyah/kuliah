import { createSlice } from "@reduxjs/toolkit";
import data from "../../utils/constants/data";

const movieSlice = createSlice({
    name: "Movies Slice",
    initialState: {
        movies: data
    },
    reducers: {
        addMovie(state, action) {
            state.movies.push(action.payload)
        }
    }
})

const { actions, reducer } = movieSlice;
const { addMovie } = actions;

export default reducer;
export { addMovie }
