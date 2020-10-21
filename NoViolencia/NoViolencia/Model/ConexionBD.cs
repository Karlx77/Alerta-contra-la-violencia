using System;
using System.Collections.Generic;
using System.Text;
using MySql.Data.MySqlClient;

namespace NoViolencia.Model
{
    class ConexionBD
    {
         MySqlConnectionStringBuilder Builder = new MySqlConnectionStringBuilder();

        //public MySqlConnection conexion = new MySqlConnection();

        public bool Conexion()
        {
            Builder.Server = "127.0.0.1";
            Builder.Database = "appxamarin";
            Builder.UserID = "root";
            Builder.Password = "secret";

            try
            {
                MySqlConnection mySql = new MySqlConnection(Builder.ToString());
                mySql.Open();
                return true;
            }
            catch (Exception e)
            {
                return false;
                throw e;
            }
            /*conexion.ConnectionString = "server = 127.0.0.1; database = appxamarin; Uid = root; pwd =;";

            try
            {
                conexion.Open();
                return true;
            }
            catch (Exception ex)
            {
                return false;
                throw ex;
            }*/

        }

    }
}
