import { useEffect, useRef, useState } from "react";
import Button from "./Button";
import { useNavigate } from "react-router-dom";
export default function OneTimePin(): React.ReactNode {
  const [time, setTime] = useState<number>(60);
  const [pinActive, setPinActive] = useState<boolean>(false);
  const [otp, setOtp] = useState<string[]>(Array(4).fill(""));
  const timerRef = useRef<number | null>(null);
  const inputRefs = useRef<HTMLInputElement[]>([]);
  const navigate = useNavigate();

  const handleOtpInput = (index: number, value: string) => {
    if (!/^\d*$/.test(value)) return;
    if(value.length === 2) return

    const newOtp = [...otp];
    newOtp[index] = value;
    setOtp(newOtp);

    if (value && index < inputRefs.current.length - 1) {
      inputRefs.current[index + 1].focus();
    }
  };

  const handleKeyDown = (
    index: number,
    e: React.KeyboardEvent<HTMLInputElement>
  ) => {
    if (e.key === "Backspace" && !otp[index] && index > 0) {
      inputRefs.current[index - 1]?.focus();
    }
  };

  const startTimer = () => {
    if (timerRef.current) return;
    setPinActive(true);
    setTime(60);
    timerRef.current = setInterval(() => {
      setTime((prev) => {
        if (prev <= 1) {
          if (timerRef.current !== null) {
            clearInterval(timerRef.current);
            timerRef.current = null;
          }
          timerRef.current = null;
          setPinActive(false);
          return 0;
        }
        console.log("h");
        return prev - 1;
      });
    }, 1000);
  };
  useEffect(() => {
    startTimer();
    return () => {
      if (timerRef.current !== null) {
        clearInterval(timerRef.current);
        timerRef.current = null;
      }
      setPinActive(false);
    };
  }, []);
  return (
    <div id="OneTimePin">
      <form className="w-[35vw] justify-center items-center flex flex-col pb-15">
        <p className="mb-5 text-login-text font-kross-neue-grotesk text-sm">
          The 4 digit code has been sent to your email
        </p>
        <div id="inputs" className="flex justify-center w-full space-x-5">
          {otp.map((digit, index) => (
            <input
              min={0}
              max={9}
              type="text"
              value={digit}
              ref={(r) => {
                if (r) {
                  inputRefs.current[index] = r;
                }
              }}
              onChange={(e) => handleOtpInput(index, e.target.value)}
              onKeyDown={(e) => handleKeyDown(index, e)}
              className="bg-input text-white aspect-square text-center h-[15%] w-[15%] rounded-xl"
            ></input>
          ))}
        </div>
        <p className="text-white font-kross-neue-grotesk mb-3 mt-3">
          {Math.floor(time / 60)}:{String(time % 60).padStart(2, "0")}
        </p>
        <a
          href="#"
          className={`${
            pinActive ? "pointer-events-none" : ""
          } underline text-link`}
          onClick={(e) => {
            e.preventDefault();
            if (!pinActive) startTimer();
          }}
        >
          Resend OTP
        </a>
        <Button
          className="mt-[1.5rem] mb-[1.5rem]"
          type="button"
          text="Verify"
          handleClick={() => {
            navigate("/change-password")
          }}
        ></Button>
      </form>
    </div>
  );
}
