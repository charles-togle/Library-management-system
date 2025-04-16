import { ReactNode } from "react";
import Background from "../assets/icons/login_background.png";

export default function LoginRegister({
  children,
}: {
  children?: ReactNode;
}): ReactNode {
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
        <div
          id="component-container"
          className="flex flex-row overflow-x-hidden absolute"
        >
          {children}
        </div>
      </div>
    </div>
  );
}
