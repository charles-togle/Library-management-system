import { ReactNode } from "react";
import Background from "../assets/icons/login_background.png";
import Login from "../components/login-register/Login";
import Register from "../components/login-register/Register";
import ForgotPassword from "../components/login-register/ForgotPassword";
import OneTimePin from "../components/login-register/OneTimePin";
import ChangePassword from "../components/login-register/ChangePassword";

export default function LoginRegister(): ReactNode {
  return (
    <div
      id="login-register"
      className="w-screen h-screen overflow-hidden bg-login-page relative"
    >
      <img
        src={Background}
        alt="login-register"
        className="w-[65%] h-full absolute left-0 object-cover mask-fade-lr"
      />
      <div
        id="container"
        className="w-[35vw] h-full flex justify-center items-center flex-col absolute right-0"
      >
        <h1 className="w-full text-center text-white font-kross-neue-grotesk font-extrabold mb-[80%] text-3xl">
          MAWMAW LIBRARY
        </h1>
        <div id="component-container" className="flex flex-row overflow-x-hidden absolute left-0">
          <Login></Login>
          <Register></Register>
          <ForgotPassword></ForgotPassword>
          <OneTimePin></OneTimePin>
          <ChangePassword></ChangePassword>
        </div>
      </div>
    </div>
  );
}
