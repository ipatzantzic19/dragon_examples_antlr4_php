grammar Grammar;

l : e
  ;

e : e '+' t  #Add
  | t         #Pat
  ;

t : t '*' f   #Mul
  | f         #Paf
  ;

f : '(' e ')' #Par
  | DIGIT     #Int
  ;

DIGIT : [0-9]+;

WS : [ \t\r\n]+ -> skip;

