import { useNavigate } from "react-router-dom";
import EmailIcon from "../../assets/icons/email_icon.png";
import PasswordIcon from "../../assets/icons/password_icon.png";
import Button from "./Button";
import { Input } from "./Input";
export default function Login(): React.ReactNode {
  const navigate = useNavigate();
  return (
    <div id="login">
      <form className="w-[35vw] justify-center items-center flex flex-col pb-15">
        <p className="mb-3 text-login-text font-kross-neue-grotesk text-sm">
          Please enter your email and password
        </p>
        <Input placeholder="Email" img={EmailIcon}></Input>
        <Input
          placeholder="Password"
          img={PasswordIcon}
          isPassword={true}
        ></Input>
        <div className="w-3/4 flex justify-between">
          <label className="text-login-text text-sm">
            <input type="checkbox" className="mr-3" />
            Remember me
          </label>
          <a
            href="#"
            onClick={(e) => {
              e.preventDefault();
              navigate("/forgot-password");
            }}
            className="text-login-text text-sm underline"
          >
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
          <a
            href="#"
            onClick={(e) => {
              e.preventDefault();
              navigate("/register");
            }}
            className="underline text-link"
          >
            Sign up
          </a>
        </p>
      </form>
    </div>
  );
}
