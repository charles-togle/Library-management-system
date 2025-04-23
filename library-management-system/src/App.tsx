import { BrowserRouter, Routes, Route, Outlet } from "react-router-dom";
import LoginRegister from "./pages/LoginRegister";
import { AccountProvider } from "./providers/AccountProvider";
import Login from "./components/login-register/Login";
import Register from "./components/login-register/Register";
import ForgotPassword from "./components/login-register/ForgotPassword";
import OneTimePin from "./components/login-register/OneTimePin";
import ChangePassword from "./components/login-register/ChangePassword";
function App() {
  const LoginRegisterWrapper = () => {
    return (
      <LoginRegister>
        <Outlet></Outlet>
      </LoginRegister>
    );
  };
  return (
    <BrowserRouter>
      <AccountProvider>
        <Routes>
          <Route path="/" element={<LoginRegisterWrapper />}>
            <Route path="/logi" element={<Login></Login>}></Route>
            <Route path="/register" element={<Register></Register>}></Route>
            <Route
              path="/forgot-password"
              element={<ForgotPassword></ForgotPassword>}
            ></Route>
            <Route path="/otp" element={<OneTimePin></OneTimePin>}></Route>
            <Route
              path="/change-password"
              element={<ChangePassword></ChangePassword>}
            ></Route>
          </Route>
        </Routes>
      </AccountProvider>
    </BrowserRouter>
  );
}

export default App;
