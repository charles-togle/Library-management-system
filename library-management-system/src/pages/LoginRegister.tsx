import { ReactNode } from "react";
// import Login from "../components/login-register/Login";
import Background from "../assets/icons/login_background.png";
// import Register from "../components/login-register/Register";
import ForgotPassword from "../components/login-register/ForgotPassword";

export default function LoginRegister(): ReactNode {
  return (
    <div
      id="login-register"
      className="w-screen h-screen overflow-hidden bg-login-page"
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
        <h1 className="w-full text-center text-white font-kross-neue-grotesk font-extrabold mb-3 text-3xl">
          MAWMAW LIBRARY
        </h1>
        <ForgotPassword></ForgotPassword>
      </div>
    </div>
  );
}
