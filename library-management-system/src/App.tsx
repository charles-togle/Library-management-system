import { BrowserRouter, Routes, Route} from "react-router-dom";
import LoginRegister from "./pages/LoginRegister";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/login" element={<LoginRegister />}></Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
