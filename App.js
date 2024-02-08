
import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import LoginForm from './Components/LoginForm/LoginForm';
import SignupForm from './Components/SignupForm/SignupForm';



function App() {
  return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route index element={<LoginForm/>}/>
          <Route path="/LoginForm" element={<LoginForm/>}/>
          <Route path="/SignupForm" element={<SignupForm/>}/>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
