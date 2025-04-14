import { ReactNode } from "react";
import "../../global.css";
export default function Button({
  className,
  type,
  handleClick,
  text,
}: {
  className?: string;
  type: "button" | "submit" | "reset";
  handleClick: React.MouseEventHandler<HTMLButtonElement>;
  text: string;
}): ReactNode {
  return (
    <button
      onClick={handleClick}
      type={type}
      className={`${className} w-3/4 h-10 bg-button-default font-bold text-white font-kross-neue-grotesk rounded-md`}
    >
      {text}
    </button>
  );
}
