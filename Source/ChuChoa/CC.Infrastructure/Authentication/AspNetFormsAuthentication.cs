using System.Web;
using System.Web.Security;

namespace CC.Infrastructure.Authentication
{
    /// <summary>
    /// The asp net forms authentication.
    /// </summary>
    public class AspNetFormsAuthentication : IFormsAuthentication
    {
        /// <summary>
        /// Gets the authentication token.
        /// </summary>
        public string AuthenticationToken
        {
            get { return HttpContext.Current.User.Identity.Name; }
        }

        /// <summary>
        /// The set authentication token.
        /// </summary>
        /// <param name="token">
        /// The token.
        /// </param>
        public void SetAuthenticationToken(string token)
        {
            FormsAuthentication.SetAuthCookie(token, false);
        }

        /// <summary>
        /// The sign out.
        /// </summary>
        public void SignOut()
        {
            FormsAuthentication.SignOut();
        }
    }
}