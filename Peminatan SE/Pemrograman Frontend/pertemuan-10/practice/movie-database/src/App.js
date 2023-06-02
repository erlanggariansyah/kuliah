import Home from "./pages/functional/Home";
import { Routes, Route } from "react-router-dom";
import Create from "./pages/functional/movie/Create";
import Rated from "./pages/functional/movie/Rated";
import Playing from "./pages/functional/movie/Playing";
import Popular from "./pages/functional/movie/Popular";
import Layout from "./layouts/Layout";
import { ThemeProvider } from "styled-components";
import theme from "./utils/constants/theme";
import GlobalStyle from "./components/functional/GlobalStyle";

function App() {
  return (
    <>
      <ThemeProvider theme={theme}>
        <GlobalStyle/>
        <Layout>
          <Routes>
            <Route path="/" element={<Home />}/>
            <Route path="/movie/add" element={<Create/>}/>
            <Route path="/movie/rated" element={<Rated/>}/>
            <Route path="/movie/playing" element={<Playing/>}/>
            <Route path="/movie/popular" element={<Popular/>}/>
          </Routes>
        </Layout>
      </ThemeProvider>
    </>
  );
}

export default App;
