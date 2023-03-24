import "./App.css";
import Footer from "./components/Footer";
import Header from "./components/Header";
import Main from "./components/Main";

const App = () => {
  return (
    <div>
      <h2>This is Create React App</h2>
      {/*
        Memanggil Component Hello.
        Mengirim props name. 
       */}
       <Header/>
       <Main/>
       <Footer/>
    </div>
  );
}

export default App;
