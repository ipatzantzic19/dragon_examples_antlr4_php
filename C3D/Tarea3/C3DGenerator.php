<?php
/**
 * C3DGenerator.php
 * Clase utilitaria para generar Código de 3 Direcciones (C3D).
 *
 * OLC2 - Tarea 3 | Universidad San Carlos de Guatemala
 */

class C3DGenerator
{
    private int   $tempCount    = 0;
    private int   $labelCount   = 0;
    private array $instructions = [];

    /** Genera un nuevo temporal único: t1, t2, t3 … */
    public function newTemp(): string
    {
        $this->tempCount++;
        return "t{$this->tempCount}";
    }

    /** Genera una nueva etiqueta única: L1, L2, L3 … */
    public function newLabel(): string
    {
        $this->labelCount++;
        return "L{$this->labelCount}";
    }

    /** Agrega una instrucción C3D a la lista. */
    public function emit(string $instruction): void
    {
        $this->instructions[] = $instruction;
    }

    /** Retorna todas las instrucciones generadas. */
    public function getInstructions(): array
    {
        return $this->instructions;
    }

    /** Imprime el C3D completo en pantalla. */
    public function printC3D(): void
    {
        echo "\n========== Código de 3 Direcciones (C3D) ==========\n\n";
        foreach ($this->instructions as $inst) {
            // Las etiquetas (terminan en ':') van sin sangría
            if (str_ends_with(trim($inst), ':')) {
                echo "{$inst}\n";
            } else {
                echo "    {$inst}\n";
            }
        }
        echo "\n====================================================\n\n";
    }
}