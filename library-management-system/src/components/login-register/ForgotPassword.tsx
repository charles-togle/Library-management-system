import { useNavigate } from "react-router-dom";
import EmailIcon from "../../assets/icons/email_icon.png";
import Button from "./Button";
import { Input } from "./Input";
export default function ForgotPassword(): React.ReactNode {
  const navigate = useNavigate();
  return (
    <div id="forgot-password">
      <form className="w-[35vw] justify-center items-center flex flex-col pb-40">
        <p className="mb-3 text-login-text font-kross-neue-grotesk text-sm">
          Please enter your email
        </p>
        <Input placeholder="Email" img={EmailIcon}></Input>
        <Button
          className="mb-[1.5rem]"
          type="button"
          text="Find my email"
          handleClick={() => {
            navigate("/otp")
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
