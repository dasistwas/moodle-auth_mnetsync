How to install:

Copy this directory into moodleroot/auth/ directory, then install the block
block_mnetsync_hosts in moodleroor/blocks/.

Please note that the regular Network Servers block WILL NOT work with mnetsync
authentication plugin! You must use the block provided with this package
(Network Servers (CFS))* on all servers that use the plugin.

All peers that have to switch to this authentication plugin have to be re-added
with the proper application type (moodle_cfs) selected, which is added during
the installation of the mnetsync plugin.

If you want to transfer existing users form MNET to MNETSYC, then you have to do 
a SQL query in your database (at your own risk, test before on testing server!)

On the remote host (where users are using the login from the identity provider):
UPDATE mdl_user SET auth='mnetsync' WHERE auth='mnet';
UPDATE mdl_mnet_host SET applicationid=3 WHERE wwwroot='http://your.wwwrot_of_identity_provider.com';

On Identity provider:
UPDATE mdl_mnet_host SET applicationid=3 WHERE wwwroot='http://your.wwwroot_of_remote_host.com';

* CFS stands for "Custom Field Sync".
