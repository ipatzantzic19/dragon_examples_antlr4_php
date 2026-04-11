grammar Grammar;

// ============================================================
// PARSER RULES
// ============================================================

program
    : statement+ EOF
    ;

statement
    : assignment SEMICOLON?     # StmtAssign
    | printStmt  SEMICOLON?     # StmtPrint
    | ifStmt                    # StmtIf
    ;

assignment
    : ID ASSIGN expr
    ;

// print acepta variable o string literal: print("Hola") o print(x)
printStmt
    : PRINT LPAREN (ID | STRING) RPAREN
    ;

// if SIN paréntesis obligatorios alrededor de la condición
ifStmt
    : IF condition LBRACE statement+ RBRACE
      ( ELSE LBRACE statement+ RBRACE )?
    ;

// Condición con cortocircuito: || menor precedencia que &&
condition
    : condition OR  condition   # CondOr
    | condition AND condition   # CondAnd
    | expr relOp expr           # CondRelOp
    | LPAREN condition RPAREN   # CondParen
    ;

relOp
    : GT | LT | GEQ | LEQ | EQ | NEQ
    ;

// Expresiones aritméticas (igual que Tarea 2)
expr
    : expr op=(MUL | DIV) expr  # ExprMulDiv
    | expr op=(ADD | SUB) expr  # ExprAddSub
    | LPAREN expr RPAREN        # ExprParen
    | NUMBER                    # ExprNumber
    | ID                        # ExprId
    ;

// ============================================================
// LEXER RULES
// ============================================================

IF        : 'if'    ;
ELSE      : 'else'  ;
PRINT     : 'print' ;

AND       : '&&' ;
OR        : '||' ;

ADD       : '+'  ;
SUB       : '-'  ;
MUL       : '*'  ;
DIV       : '/'  ;

GEQ       : '>=' ;
LEQ       : '<=' ;
GT        : '>'  ;
LT        : '<'  ;
EQ        : '==' ;
NEQ       : '!=' ;

ASSIGN    : ':=' ;

LPAREN    : '('  ;
RPAREN    : ')'  ;
LBRACE    : '{'  ;
RBRACE    : '}'  ;
SEMICOLON : ';'  ;

NUMBER    : [0-9]+ ('.' [0-9]+)? ;
ID        : [a-zA-Z_][a-zA-Z_0-9]* ;
STRING    : '"' ~["\r\n]* '"' ;

WS        : [ \t\r\n]+ -> skip ;
COMMENT   : '//' ~[\r\n]* -> skip ;