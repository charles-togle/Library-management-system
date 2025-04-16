import EmailIcon from "../../assets/icons/email_icon.png";
import PasswordIcon from "../../assets/icons/password_icon.png";
import UsernameIcon from "../../assets/icons/username_icon.png";
import NameIcon from "../../assets/icons/Name_icon.png";
import { Input } from "./Input";
import Button from "./Button";
import { useNavigate } from "react-router-dom";

export default function Register(): React.ReactNode {
  const navigate = useNavigate();
  return (
    <div id="Register">
      <form className="w-[35vw] justify-center items-center flex flex-col pb-5">
        <p className="mb-3 text-login-text font-kross-neue-grotesk text-sm">
          Create an Account
        </p>
        <Input placeholder="Name" img={NameIcon}></Input>
        <Input placeholder="Username" img={UsernameIcon}></Input>
        <Input placeholder="Email" img={EmailIcon}></Input>
        <Input
          placeholder="Password"
          img={PasswordIcon}
          isPassword={true}
        ></Input>
        <Button
          className="mb-[1.5rem]"
          type="button"
          text="Create account"
          handleClick={() => {
            console.log("clicked");
          }}
        ></Button>
        <p className="w-3/4 text-center text-login-text text-sm">
          Already a member?{" "}
          <a
            href="#"
            onClick={(e) => {
              e.preventDefault();
              navigate("/login");
            }}
            className="underline text-link"
          >
            Click here
          </a>
        </p>
      </form>
    </div>
  );
}
