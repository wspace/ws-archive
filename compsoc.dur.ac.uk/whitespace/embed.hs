module Main where

import System(getArgs)
import Char(isSpace)

main :: IO ()
main = do
       args <- getArgs
       if (length args)/=2
        then usage
	else embedfiles (args!!0) (args!!1)

usage :: IO ()
usage = do
	putStrLn "embed (c) 2003 Edwin Brady"
	putStrLn "-------------------------------"
	putStrLn "Usage: embed [textfile] [file.ws]"


embedfiles :: FilePath -> FilePath -> IO ()
embedfiles txt ws =
   do txtfile <- readFile txt
      wsfile <- readFile ws
      let outf = embed txtfile wsfile
      putStrLn outf

embed :: String -> String -> String
embed [] spcs = spcs
embed txt [] = txt
embed (t:ts) (s:ss) 
   | isSpace t = s:(embed ts ss)
   | otherwise = t:(embed ts (s:ss))
