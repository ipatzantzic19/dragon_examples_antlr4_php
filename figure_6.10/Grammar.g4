grammar Grammar;

line: (statement)* EOF;

statement: assignment                # visitAssignment
         | expression                # visitPrintExpression
         ;

assignment: NAME '=' expression ';';

expression: '-' expression                      # unaryMinus
          | expression op=('*'|'/') expression  # multiplicationDivision
          | expression op=('+'|'-') expression  # additionSubtraction
          | '(' expression ')'                   # parenthesis
          | NAME                                 # identifierName
          | NUMBER                               # number
          ;

NAME: [a-zA-Z_][a-zA-Z0-9_]*;
NUMBER: [0-9]+ ('.' [0-9]+)?;
WS: [ \t\r\n]+ -> skip;