import logo from './logo.svg';
import './App.css';
import Hello from './components/Hello';

function App() {
  const authorName = "Erlangga Riansyah";

  return (
    <div>
      <h2>Hello Frontend from {authorName}!</h2>
      <Hello name="Angga"/>
    </div>
  );
}

export default App;
