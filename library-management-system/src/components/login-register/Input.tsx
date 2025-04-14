import { useEffect, useState } from "react";
import ViewIcon from "../../assets/icons/view_icon.png";

interface InputPropsType {
  placeholder: string;
  img: string;
  isPassword?: boolean;
  value?: string;
  setValue?: React.Dispatch<React.SetStateAction<string>>;
}

export const Input: React.FC<InputPropsType> = ({
  placeholder,
  img,
  isPassword,
  value,
  setValue = () => {},
}) => {
  const [isHidden, setHidden] = useState<boolean>(false);
  useEffect(() => {
    if (isPassword) {
      setHidden(isPassword);
    }
  }, [setHidden, isPassword]);

  return (
    <label className="login-inputs">
      <img src={img} alt="email" />
      <input
        type={isHidden ? "password" : "text"}
        placeholder={placeholder}
        className="w-full text-white"
        value={value}
        onChange={(e) => {
          setValue(e.target.value);
        }}
      />
      {isPassword && (
        <img
          src={ViewIcon}
          alt="show password"
          onClick={() => setHidden((prev) => !prev)}
        />
      )}
    </label>
  );
};
