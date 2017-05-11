using System;
using Dapper;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.Linq;

namespace CC.DataAccessLayer
{
    public abstract class AbstractDataMapper<T>
    {
        /// <summary>
        /// Gets the table name muon modify
        /// </summary>
        protected abstract string TableName { get; }

        /// <summary>
        /// Gets chuoi connection.
        /// </summary>
        protected IDbConnection Connection => new SqlConnection(
            ConfigurationManager.ConnectionStrings["ChuChoaDatabaseContext"].ConnectionString);

        /// <summary>
        /// Select 1 bản ghi (1 Record).
        /// </summary>
        public virtual T FindSingle(string query, dynamic param)
        {
            dynamic item = null;

            using (IDbConnection cn = Connection)
            {
                cn.Open();
                var result = cn.Query(query, (object)param).SingleOrDefault();

                if (result != null)
                {
                    item = Map(result);
                }
            }

            return item;
        }

        /// <summary>
        /// Select all tra ve 1 IEnumerable.
        /// </summary>
        public virtual IEnumerable<T> FindAll()
        {
            var items = new List<T>();

            using (var cn = Connection)
            {
                cn.Open();
                var results = cn.Query("SELECT * FROM " + TableName).ToList();

                for (var i = 0; i < results.Count(); i++)
                {
                    items.Add(Map(results.ElementAt(i)));
                }
            }

            return items;
        }

        /// <summary>
        /// The delete.
        /// </summary>
        /// <param name="id">
        /// The id.
        /// </param>
        public virtual void Delete(Guid id)
        {
            using (var cn = Connection)
            {
                cn.Open();
                cn.Execute("DELETE FROM " + TableName + " WHERE ID=@ID", new { ID = id });
            }
        }

        public abstract T Map(dynamic result);
    }
}