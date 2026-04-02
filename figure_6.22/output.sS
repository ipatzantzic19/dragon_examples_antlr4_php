.data
    a: .word 0
    a_cols: .word 0
    b: .word 1, 2, 3 
    b_cols: .word 3
    c: .word 1, 2, 3, 4, 5, 6, 7, 8, 9 
    c_rows: .word 3
    c_cols: .word 3
    d: .word 1, 2, 3, 4, 5, 6, 7, 8 
    d_face: .word 2
    d_rows: .word 2
    d_cols: .word 2

.text
.global _start
_start:
    	mov x0, #1
    	lsl x1, x0, #2
    	adrp x2, b
    	add x2, x2, :lo12:b
    	add x0, x1, x2
    	ldr w0, [x0]
    	sxtw x0, w0
    	bl print_int
    	mov x0, #2
    	lsl x0, x0, #2
    	mov x1, #2
    	lsl x1, x1, #2
    	adrp x2, c_cols
    	add x2, x2, :lo12:c_cols
    	ldr w2, [x2]
    	mul x3, x0, x2
    	add x4, x3, x1
    	adrp x5, c
    	add x5, x5, :lo12:c
    	add x0, x4, x5
    	ldr w0, [x0]
    	sxtw x0, w0
    	bl print_int
    	mov x0, #1
    	lsl x0, x0, #2
    	mov x1, #0
    	lsl x1, x1, #2
    	mov x2, #0
    	lsl x2, x2, #2
    	adrp x3, d_rows
    	add x3, x3, :lo12:d_rows
    	ldr w3, [x3]
    	mul x4, x0, x3
    	add x4, x4, x1
    	adrp x5, d_cols
    	add x5, x5, :lo12:d_cols
    	ldr w5, [x5]
    	mul x6, x4, x5
    	add x6, x6, x2
    	adrp x8, d
    	add x8, x8, :lo12:d
    	add x0, x6, x8
    	ldr w0, [x0]
    	sxtw x0, w0
    	bl print_int
    	mov x0, #0
    	mov x8, #93
    	svc #0

print_int:
    	str x30, [sp, #-48]!
    	mov x1, sp
    	add x1, x1, #46
    	mov w2, #10
    	strb w2, [x1]
    	mov x2, #10
_L_itoa_check_zero:
    	cmp x0, #0
    	bge _L_itoa_loop
    	neg x0, x0
_L_itoa_loop:
    	cbz x0, _L_itoa_sign
    	udiv x3, x0, x2
    	msub x4, x3, x2, x0
    	add x4, x4, #48
    	sub x1, x1, #1
    	strb w4, [x1]
    	mov x0, x3
    	b _L_itoa_loop
_L_itoa_sign:
    	ldr x0, [sp, #48]
    	cmp x0, #0
    	bge _L_itoa_print
    	mov w2, #45
    	sub x1, x1, #1
    	strb w2, [x1]
_L_itoa_print:
    	mov x2, sp
    	add x2, x2, #47
    	sub x2, x2, x1
    	mov x0, #1
    	mov x8, #64
    	svc #0
    	ldr x30, [sp], #48
    	ret

