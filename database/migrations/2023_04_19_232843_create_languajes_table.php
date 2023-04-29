<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLanguajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
        });

        DB::table('languajes')->insert([
            array('nombre' => 'Java'),
            array('nombre' => 'Python'),
            array('nombre' => 'JavaScript'),
            array('nombre' => 'C#'),
            array('nombre' => 'C++'),
            array('nombre' => 'PHP'),
            array('nombre' => 'Swift'),
            array('nombre' => 'Ruby'),
            array('nombre' => 'Objective-C'),
            array('nombre' => 'Kotlin'),
            array('nombre' => 'Go'),
            array('nombre' => 'TypeScript'),
            array('nombre' => 'Rust'),
            array('nombre' => 'SQL'),
            array('nombre' => 'MATLAB'),
            array('nombre' => 'R'),
            array('nombre' => 'Perl'),
            array('nombre' => 'Lua'),
            array('nombre' => 'Dart'),
            array('nombre' => 'Scala'),
            array('nombre' => 'Haskell'),
            array('nombre' => 'Groovy'),
            array('nombre' => 'F#'),
            array('nombre' => 'Bash'),
            array('nombre' => 'Erlang'),
            array('nombre' => 'Assembly'),
            array('nombre' => 'COBOL'),
            array('nombre' => 'Ada'),
            array('nombre' => 'Prolog'),
            array('nombre' => 'Lisp'),
            array('nombre' => 'Fortran'),
            array('nombre' => 'Crystal'),
            array('nombre' => 'Delphi/Object Pascal'),
            array('nombre' => 'Visual Basic'),
            array('nombre' => 'Tcl'),
            array('nombre' => 'Scheme'),
            array('nombre' => 'Clojure'),
            array('nombre' => 'CoffeeScript'),
            array('nombre' => 'Smalltalk'),
            array('nombre' => 'ActionScript'),
            array('nombre' => 'Elixir'),
            array('nombre' => 'Ocaml'),
            array('nombre' => 'Awk'),
            array('nombre' => 'Ceylon'),
            array('nombre' => 'D'),
            array('nombre' => 'Csound'),
            array('nombre' => 'Verilog'),
            array('nombre' => 'Julia'),
            array('nombre' => 'VHDL'),
            array('nombre' => 'Factor'),
            array('nombre' => 'Io'),
            array('nombre' => 'Forth'),
            array('nombre' => 'Pure Data'),
            array('nombre' => 'LabVIEW'),
            array('nombre' => 'Etoys'),
            array('nombre' => 'Scratch'),
            array('nombre' => 'Idris'),
            array('nombre' => 'Chapel'),
            array('nombre' => 'COOL'),
            array('nombre' => 'Dylan'),
            array('nombre' => 'Falcon'),
            array('nombre' => 'Inform'),
            array('nombre' => 'LabVIEW NXG'),
            array('nombre' => 'LOGO'),
            array('nombre' => 'MakeCode'),
            array('nombre' => 'Maple'),
            array('nombre' => 'Max/MSP'),
            array('nombre' => 'MQL4'),
            array('nombre' => 'OpenCL'),
            array('nombre' => 'PARI/GP'),
            array('nombre' => 'PowerBuilder'),
            array('nombre' => 'Puppet'),
            array('nombre' => 'PureScript'),
            array('nombre' => 'Q#'),
            array('nombre' => 'Quorum'),
            array('nombre' => 'RPG'),
            array('nombre' => 'S-Lang'),
            array('nombre' => 'SAIL'),
            array('nombre' => 'SNOBOL'),
            array('nombre' => 'SPARK'),
            array('nombre' => 'SPSS'),
            array('nombre' => 'Stata'),
            array('nombre' => 'TADS'),
            array('nombre' => 'Tea'),
            array('nombre' => 'Turing'),
            array('nombre' => 'UnrealScript'),
            array('nombre' => 'Vala'),
            array('nombre' => 'Visual Basic .NET'),
            array('nombre' => 'WATFIV, WATFOR'),
            array('nombre' => 'X10'),
            array('nombre' => 'Xojo'),
            array('nombre' => 'Zsh'),
            array('nombre' => 'ABC'),
            array('nombre' => 'Amiga E'),
            array('nombre' => 'AMPL'),
            array('nombre' => 'Esperanto')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languajes');
    }
}
