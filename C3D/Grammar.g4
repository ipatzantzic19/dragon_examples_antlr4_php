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

printStmt
    : PRINT LPAREN ID RPAREN
    ;

ifStmt
    : IF LPAREN condition RPAREN
        LBRACE statement+ RBRACE
      ( ELSE LBRACE statement+ RBRACE )?
    ;

condition
    : expr relOp expr
    ;

relOp
    : GT | LT | GEQ | LEQ | EQ | NEQ
    ;

// Precedencia: MulDiv > AddSub (orden de alternativas en ANTLR4)
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

WS        : [ \t\r\n]+ -> skip ;
COMMENT   : '//' ~[\r\n]* -> skip ;