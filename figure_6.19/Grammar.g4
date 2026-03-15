grammar Grammar;

program: stat+ ;

stat: ID '=' expr NEWLINE          # assignment
    | NEWLINE                      # blank
    ;

expr: expr op=('*'|'/') expr       # MulDiv
    | expr op=('+'|'-') expr       # AddSub
    | INT                          # int
    | ID                           # id
    | '(' expr ')'                 # parents
    ;

ID  : [a-zA-Z]+ ;
INT : [0-9]+ ;
NEWLINE:'\r'? '\n' ;
WS  : [ \t]+ -> skip ;