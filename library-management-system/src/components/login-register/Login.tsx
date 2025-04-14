import { useState } from "react";
import emailIcon from "../../assets/icons/email_icon.png";
import passwordIcon from "../../assets/icons/password_icon.png";
import viewIcon from "../../assets/icons/view_icon.png";
import Button from "./Button";

export default function Login(): React.ReactNode {
  const [isHidden, setHidden] = useState<boolean>(true);

  return (
    <div id="login">
      <form className="w-[35vw] justify-center items-center flex flex-col">
        <p className="mb-3 text-login-text font-kross-neue-grotesk text-sm">
          Please enter your email and password
        </p>
        <label className="login-inputs">
          <img src={emailIcon} alt="email" />
          <input
            type="text"
            name=""
            id=""
            placeholder="Email"
            className="w-full text-white"
          />
        </label>
        <label className="login-inputs">
          <img src={passwordIcon} alt="password" />
          <input
            type={isHidden ? "password" : "text"}
            placeholder="Password"
            className="w-full text-white"
          />
          <img
            src={viewIcon}
            alt="show password"
            onClick={() => setHidden((prev) => !prev)}
          />
        </label>
        <div className="w-3/4 flex justify-between">
          <label className="text-login-text text-sm">
            <input type="checkbox" className="mr-3" />
            Remember me
          </label>
          <a href="#" className="text-login-text text-sm underline">
            Forgot password
          </a>
        </div>
        <Button
          className="mt-[1.5rem] mb-[1.5rem]"
          type="button"
          text="Login"
          handleClick={() => {
            console.log("clicked");
          }}
        ></Button>
        <p className="w-3/4 text-center text-login-text text-sm">
          Don't have an account?{" "}
          <a href="#" className="underline text-link">
            Sign up
          </a>
        </p>
      </form>
    </div>
  );
}
