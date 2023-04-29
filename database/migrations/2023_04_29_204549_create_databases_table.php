<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
        });
        DB::table('databases')->insert([
            array('nombre' => 'MySQL'),
            array('nombre' => 'Oracle'),
            array('nombre' => 'Microsoft SQL Server'),
            array('nombre' => 'MongoDB'),
            array('nombre' => 'PostgreSQL'),
            array('nombre' => 'IBM DB2'),
            array('nombre' => 'SQLite'),
            array('nombre' => 'MariaDB'),
            array('nombre' => 'Cassandra'),
            array('nombre' => 'Redis'),
            array('nombre' => 'Couchbase'),
            array('nombre' => 'Amazon Aurora'),
            array('nombre' => 'Amazon DynamoDB'),
            array('nombre' => 'Amazon Redshift'),
            array('nombre' => 'Amazon Neptune'),
            array('nombre' => 'Google Bigtable'),
            array('nombre' => 'Google Cloud Spanner'),
            array('nombre' => 'Google Cloud SQL'),
            array('nombre' => 'Teradata'),
            array('nombre' => 'SAP HANA'),
            array('nombre' => 'Informix'),
            array('nombre' => 'Firebird'),
            array('nombre' => 'Apache HBase'),
            array('nombre' => 'Apache Cassandra'),
            array('nombre' => 'Apache Derby'),
            array('nombre' => 'Apache Hive'),
            array('nombre' => 'Apache Solr'),
            array('nombre' => 'Apache Ignite'),
            array('nombre' => 'Apache Phoenix'),
            array('nombre' => 'Apache CouchDB'),
            array('nombre' => 'Apache Accumulo'),
            array('nombre' => 'Apache Drill'),
            array('nombre' => 'Apache Impala'),
            array('nombre' => 'Apache Kudu'),
            array('nombre' => 'Apache Flink'),
            array('nombre' => 'Apache Kafka'),
            array('nombre' => 'Elasticsearch'),
            array('nombre' => 'Neo4j'),
            array('nombre' => 'OrientDB'),
            array('nombre' => 'ArangoDB'),
            array('nombre' => 'Realm'),
            array('nombre' => 'InterSystems Caché'),
            array('nombre' => 'MarkLogic'),
            array('nombre' => 'RavenDB'),
            array('nombre' => 'Riak'),
            array('nombre' => 'VoltDB'),
            array('nombre' => 'CouchDB'),
            array('nombre' => 'InfluxDB'),
            array('nombre' => 'FaunaDB'),
            array('nombre' => 'YugabyteDB'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databases');
    }
}
