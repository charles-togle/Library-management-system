import { BrowserRouter, Routes, Route } from "react-router-dom";
import LoginRegister from "./pages/LoginRegister";
import { AccountProvider } from "./providers/AccountProvider";

function App() {
  return (
    <BrowserRouter>
      <AccountProvider>
        <Routes>
          <Route path="/login" element={<LoginRegister />}></Route>
        </Routes>
      </AccountProvider>
    </BrowserRouter>
  );
}

export default App;
