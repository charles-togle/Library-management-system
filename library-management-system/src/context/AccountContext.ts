import { createContext} from "react"

export interface AccountDataType{
    username: string
    email: string
    name: string
}

export interface AccountContextDataType{
    account: AccountDataType,
    setAccount: React.Dispatch<React.SetStateAction<AccountDataType>>
}

export const AccountContext = createContext<AccountContextDataType | undefined>(undefined);