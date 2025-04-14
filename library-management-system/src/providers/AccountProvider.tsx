import { ReactNode, useState } from "react";
import { AccountDataType, AccountContext } from "../context/AccountContext";

export const AccountProvider: React.FC<{ children: ReactNode }> = ({
  children,
}) => {
  const [account, setAccount] = useState<AccountDataType>({
    name: "",
    username: "",
    email: "",
  });

  return (
    <AccountContext.Provider value={{ account: account, setAccount }}>
      {children}
    </AccountContext.Provider>
  );
};
