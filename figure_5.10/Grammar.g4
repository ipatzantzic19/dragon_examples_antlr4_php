grammar Grammar;

l : e EOF;

e : t ep       # ET
  ;

ep : '+' t ep  # Sum
   |           # EpsSum
   ;

t : f tp       # TF
  ;

tp : '*' f tp  # Mul
   |           # EpsMul
   ;

f : '(' e ')'  # Brace
  | DIGIT      # Digit
  ;

DIGIT : [0-9]+;

WS : [ \t\r\n]+ -> skip;
